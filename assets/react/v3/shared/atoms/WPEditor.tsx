import { tutorConfig } from '@Config/config';
import { borderRadius, colorTokens } from '@Config/styles';
import { styleUtils } from '@Utils/style-utils';
import { nanoid } from '@Utils/util';
import { css } from '@emotion/react';
import { __, _x } from '@wordpress/i18n';
import { useCallback, useEffect, useRef, useState } from 'react';

interface WPEditorProps {
  value: string;
  onChange: (value: string) => void;
  isMinimal?: boolean;
  autoFocus?: boolean;
}

const isTutorPro = !!tutorConfig.tutor_pro_url;

// Without getDefaultSettings function editor does not initiate
if (!window.wp.editor.getDefaultSettings) {
  window.wp.editor.getDefaultSettings = () => ({});
}

function editorConfig(onChange: (value: string) => void, setIsFocused: (value: boolean) => void, isMinimal?: boolean) {
  return {
    tinymce: {
      wpautop: true,
      menubar: false,
      branding: false,
      height: 200,
      browser_spellcheck: true,
      convert_urls: false,
      end_container_on_empty_block: true,
      entities: '38,amp,60,lt,62,gt',
      entity_encoding: 'raw',
      ...(isTutorPro && {
        external_plugins: {
          codesample: 'https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/plugins/codesample/plugin.min.js',
        },
        codesample_languages: [
          { text: 'HTML/XML', value: 'markup' },
          { text: 'JavaScript', value: 'javascript' },
          { text: 'CSS', value: 'css' },
          { text: 'PHP', value: 'php' },
          { text: 'Ruby', value: 'ruby' },
          { text: 'Python', value: 'python' },
          { text: 'Java', value: 'java' },
          { text: 'C', value: 'c' },
          { text: 'C#', value: 'csharp' },
          { text: 'C++', value: 'cpp' },
        ],
      }),
      fix_list_elements: true,
      indent: false,
      relative_urls: 0,
      remove_script_host: 0,
      plugins:
        'charmap,colorpicker,hr,lists,image,media,paste,tabfocus,textcolor,fullscreen,wordpress,wpautoresize,wpeditimage,wpemoji,wpgallery,wplink,wpdialogs,wptextpattern,wpview',
      skin: 'lightgray',
      submit_patch: true,
      link_context_toolbar: false,
      theme: 'modern',
      toolbar1: isMinimal
        ? `bold,italic,underline,image${isTutorPro ? ',codesample' : ''}`
        : `formatselect,bold,italic,bullist,numlist,blockquote,alignleft,aligncenter,alignright,link,unlink,wp_more,fullscreen,wp_adv,tutor_button${
            isTutorPro ? ',codesample' : ''
          }`,

      toolbar2: 'strikethrough,hr,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo,wp_help',
      content_css: '/wp-includes/css/dashicons.min.css,/wp-includes/js/tinymce/skins/wordpress/wp-content.css',
      // biome-ignore lint/suspicious/noExplicitAny: <explanation>
      setup: (editor: any) => {
        if (!isMinimal) {
          editor.addButton('tutor_button', {
            text: __('Tutor ShortCode', 'tutor'),
            icon: false,
            type: 'menubutton',
            menu: [
              {
                text: __('Student Registration Form', 'tutor'),
                onclick: () => {
                  editor.insertContent('[tutor_student_registration_form]');
                },
              },
              {
                text: __('Instructor Registration Form', 'tutor'),
                onclick: () => {
                  editor.insertContent('[tutor_instructor_registration_form]');
                },
              },
              {
                text: _x('Courses', 'tinyMCE button courses', 'tutor'),
                onclick: () => {
                  editor.windowManager.open({
                    title: __('Courses Shortcode', 'tutor'),
                    body: [
                      {
                        type: 'textbox',
                        name: 'id',
                        label: __('Course id, separate by (,) comma', 'tutor'),
                        value: '',
                      },
                      {
                        type: 'textbox',
                        name: 'exclude_ids',
                        label: __('Exclude Course IDS', 'tutor'),
                        value: '',
                      },
                      {
                        type: 'textbox',
                        name: 'category',
                        label: __('Category IDS', 'tutor'),
                        value: '',
                      },
                      {
                        type: 'listbox',
                        name: 'orderby',
                        label: _x('Order By', 'tinyMCE button order by', 'tutor'),
                        onselect: () => {},
                        values: [
                          { text: 'ID', value: 'ID' },
                          { text: 'title', value: 'title' },
                          { text: 'rand', value: 'rand' },
                          { text: 'date', value: 'date' },
                          { text: 'menu_order', value: 'menu_order' },
                          { text: 'post__in', value: 'post__in' },
                        ],
                      },
                      {
                        type: 'listbox',
                        name: 'order',
                        label: _x('Order', 'tinyMCE button order', 'tutor'),
                        onselect: () => {},
                        values: [
                          { text: 'DESC', value: 'DESC' },
                          { text: 'ASC', value: 'ASC' },
                        ],
                      },
                      {
                        type: 'textbox',
                        name: 'count',
                        label: __('Count', 'tutor'),
                        value: '6',
                      },
                    ],
                    // biome-ignore lint/suspicious/noExplicitAny: <explanation>
                    onsubmit: (e: any) => {
                      editor.insertContent(
                        `[tutor_course id="${e.data.id}" exclude_ids="${e.data.exclude_ids}" category="${e.data.category}" orderby="${e.data.orderby}" order="${e.data.order}" count="${e.data.count}"]`,
                      );
                    },
                  });
                },
              },
            ],
          });
        }
        editor.on('change keyup paste', () => {
          onChange(editor.getContent());
        });
        editor.on('focus', () => setIsFocused(true));
        editor.on('blur', () => setIsFocused(false));
      },
      wp_keep_scroll_position: false,
      wpeditimage_html5_captions: true,
    },
    mediaButtons: !isMinimal,
    drag_drop_upload: true,
    quicktags: isMinimal
      ? false
      : {
          buttons: ['strong', 'em', 'block', 'del', 'ins', 'img', 'ul', 'ol', 'li', 'code', 'more', 'close'],
        },
  };
}

const WPEditor = ({ value = '', onChange, isMinimal, autoFocus = false }: WPEditorProps) => {
  const editorRef = useRef<HTMLTextAreaElement>(null);
  const { current: editorId } = useRef(nanoid());
  const [isFocused, setIsFocused] = useState(autoFocus);

  const handleOnChange = (event: Event) => {
    const target = event.target as HTMLTextAreaElement;
    onChange(target.value);
  };

  // biome-ignore lint/correctness/useExhaustiveDependencies: <explanation>
  const updateEditorContent = useCallback(
    (value: string) => {
      const { tinymce } = window;
      if (!tinymce || isFocused) {
        return;
      }

      const editorInstance = window.tinymce.get(editorId);
      if (editorInstance) {
        if (value !== editorInstance.getContent()) {
          editorInstance.setContent(value);
        }
      }
    },
    [editorId, isFocused],
  );

  // biome-ignore lint/correctness/useExhaustiveDependencies: <explanation>
  useEffect(() => {
    updateEditorContent(value);
  }, [value]);

  // biome-ignore lint/correctness/useExhaustiveDependencies: <explanation>
  useEffect(() => {
    if (typeof window.wp !== 'undefined' && window.wp.editor) {
      window.wp.editor.remove(editorId);
      window.wp.editor.initialize(editorId, editorConfig(onChange, setIsFocused, isMinimal));

      editorRef.current?.addEventListener('change', handleOnChange);
      editorRef.current?.addEventListener('input', handleOnChange);

      return () => {
        window.wp.editor.remove(editorId);

        editorRef.current?.removeEventListener('change', handleOnChange);
        editorRef.current?.removeEventListener('input', handleOnChange);
      };
    }
  }, []);

  return (
    <div
      css={styles.wrapper({
        isMinimal,
        isFocused,
      })}
    >
      <textarea ref={editorRef} id={editorId} defaultValue={value} />
    </div>
  );
};

export default WPEditor;

const styles = {
  wrapper: ({
    isMinimal,
    isFocused,
  }: {
    isMinimal?: boolean;
    isFocused: boolean;
  }) => css`
    flex: 1;

    .wp-editor-tools {
      z-index: auto;
    }

    .wp-editor-container {
      border-color: ${colorTokens.stroke.default};
      border-top-left-radius: ${borderRadius[6]};
      border-bottom-left-radius: ${borderRadius[6]};
      border-bottom-right-radius: ${borderRadius[6]};
      background-color: ${colorTokens.background.white};

      ${
        isFocused &&
        css`
          ${styleUtils.inputFocus}
        `
      }

      :focus-within {
        ${styleUtils.inputFocus}
      }
    }

    .wp-switch-editor {
      border-top-left-radius: ${borderRadius[4]};
      border-top-right-radius: ${borderRadius[4]};
      border-color: ${colorTokens.stroke.default};
      background-color: ${colorTokens.background.default};
    }

    .html-active .switch-html,
    .tmce-active .switch-tmce {
      border-bottom-color: ${colorTokens.background.default};
    }

    .mce-toolbar-grp,
    .quicktags-toolbar {
      border-top-left-radius: ${borderRadius[6]};
      background-color: ${colorTokens.background.default};
      border-color: ${colorTokens.stroke.default};

      ${
        isMinimal &&
        css`
          border-top-right-radius: ${borderRadius[6]};
        `
      }
    }

    .mce-top-part::before {
      display: none;
    }

    .mce-statusbar {
      border-color: ${colorTokens.stroke.default};
      border-bottom-left-radius: ${borderRadius[6]};
      border-bottom-right-radius: ${borderRadius[6]};
    }

    .mce-tinymce {
      box-shadow: none;
      background-color: transparent;
    }

    ${
      isMinimal &&
      css`
        .mce-tinymce.mce-container {
          border: 1px solid ${colorTokens.stroke.default};
          border-radius: ${borderRadius[6]};

          ${
            isFocused &&
            css`
              ${styleUtils.inputFocus}
            `
          }
        }
      `
    }

    textarea {
      visibility: visible !important;
      width: 100%;
      resize: none;
      border: none;
      outline: none;
    }

    .mce-active {
      background: #555c66 !important;
    }
  `,
};