window.selectSearchField = (selectElement) => {
	const tutorFormSelect = document.querySelectorAll(selectElement);
	(() => {
		tutorFormSelect.forEach((element) => {
			if (!element.hasAttribute('noDropdown') && !element.classList.contains('no-tutor-dropdown')) {
				let initialSelectedItem = element.options[element.selectedIndex];
				element.style.display = 'none';
				let searchInputWrap, searchInput, resultFilter, resultWrap, resultList, textToSearch, dropDownOthers, dropDown;

				element.insertAdjacentHTML('afterend', ddMarkup(element.options));
				searchInputWrap = element.nextElementSibling.querySelector('.tutor-input-search');
				searchInput = searchInputWrap && searchInputWrap.querySelector('input');
				if (element.options.length < 5) {
					searchInputWrap.style.display = 'none';
				}

				dropDownOthers = document.querySelectorAll('.tutor-dropdown-select-options-container.is-active');
				dropDown = element.nextElementSibling.querySelector('.tutor-dropdown-select-options-container');
				const selectLabel = element.nextElementSibling.querySelector('.tutor-dropdown-select-selected');
				const selectedLabel = selectLabel && selectLabel.querySelector('[tutor-dropdown-label]');
				selectedLabel.innerText = initialSelectedItem && initialSelectedItem.text;

				selectLabel.onclick = (e) => {
					e.stopPropagation();
					let thisDropDown = false;
					if (true == dropDown.classList.contains('is-active')) {
						thisDropDown = true;
					}
					
					dd_hide_dom_click(document.querySelectorAll('.tutor-dropdown-select-options-container'));

					if (true == thisDropDown) {
						dropDown.classList.remove('is-active');
					} else {
						dropDown.classList.add('is-active');
					}
					setTimeout(() => {
						searchInput.focus();
					}, 100);

					dropDown.onclick = (e) => {
						e.stopPropagation();
					};
				};

				resultWrap = searchInputWrap.nextElementSibling;
				resultList = resultWrap && resultWrap.querySelectorAll('.tutor-dropdown-select-option');

				if (resultList) {
					resultList.forEach((item) => {
						item.onclick = (e) => {
							e.stopPropagation();
							let selectFieldOptions = Array.from(element.options);
							selectFieldOptions.forEach((option, i) => {
								if (option.value === e.target.dataset.key) {
									dropDown.classList.toggle('is-active');
									selectedLabel.innerText = e.target.innerText;
									selectedLabel.dataset.value = option.value;
									element.value = option.value;
									const save_tutor_option = document.getElementById('save_tutor_option');
									if (save_tutor_option) {
										save_tutor_option.disabled = false;
									}
								}
							});

							var onChangeEvent = new Event('change');
							element.dispatchEvent(onChangeEvent);
							jQuery(selectFieldOptions).trigger('change');
						};
					});
				}

				const countHiddenItems = (list) => {
					let result = 0;
					list.forEach((item) => {
						if (item.style.display !== 'none') {
							result += 1;
						}
					});
					return result;
				};

				searchInput.oninput = (e) => {
					let txtValue,
						noItemFound = false;
					resultFilter = e.target.value.toUpperCase();
					resultList.forEach((item) => {
						textToSearch = item.querySelector('[tutor-dropdown-item]');
						txtValue = textToSearch.textContent || textToSearch.innerText;
						if (txtValue.toUpperCase().indexOf(resultFilter) > -1) {
							item.style.display = '';
							noItemFound = 'false';
						} else {
							noItemFound = 'true';
							item.style.display = 'none';
						}
					});

					let noItemText = `
                    <div class="tutor-dropdown-select-option noItem">
                        No item found
                    </div>
                    `;

					let appendNoItemText = dropDown.querySelector('.tutor-frequencies');
					if (0 == countHiddenItems(resultList)) {
						let hasNoItem = false;
						appendNoItemText.querySelectorAll('.tutor-dropdown-select-option').forEach((item) => {
							if (item.classList.contains('noItem') == true) {
								hasNoItem = true;
							}
						});
						if (false == hasNoItem) {
							appendNoItemText.insertAdjacentHTML('beforeend', noItemText);
							hasNoItem = true;
						}
					} else {
						if (null !== dropDown.querySelector('.noItem')) {
							dropDown.querySelector('.noItem').remove();
						}
					}
				};
			}
		});

		const selectDdMarkup = document.querySelectorAll('.tutor-dropdown-select.select-dropdown');
		selectDdMarkup.forEach((item) => {
			if (item.nextElementSibling) {
				if (item.nextElementSibling.classList.contains('select-dropdown')) {
					item.nextElementSibling.remove();
				}
			}
		});

		let otherDropDown = document.querySelectorAll('.tutor-dropdown-select-options-container');
		document.onclick = (e) => {
			dd_hide_dom_click(otherDropDown);
		};
	})();

	function dd_hide_dom_click(elem) {
		if (elem) {
			elem.forEach((elemItem) => {
				elemItem.classList.remove('is-active');
			});
		}
	}

	function ddMarkup(options) {
		let optionsList = '';
		Array.from(options).forEach((item) => {
			optionsList += `
            <div class="tutor-dropdown-select-option">
				<div class="tutor-fs-7 tutor-color-black-70 tutor-admin-report-frequency" tutor-dropdown-item data-key="${item.value}">${item.text}</div>
            </div>
            `;
		});

		let markupDD = `
        <div class="tutor-dropdown-select select-dropdown">
            <div class="tutor-dropdown-select-options-container">
                <div class="tutor-input-search">
                    <div class="tutor-input-group tutor-form-control-has-icon tutor-form-control-lg">
                        <span class="tutor-icon-search-filled tutor-input-group-icon color-black-50"></span>
                        <input
                        type="search"
                        class="tutor-form-control"
                        placeholder="Search ..."
                        />
                    </div>
                </div>
                <div class="tutor-frequencies">
                    ${optionsList}
                </div>
            </div>
            <div class="tutor-dropdown-select-selected">
                <div class="tutor-fs-6 tutor-fw-medium tutor-pr-20" tutor-dropdown-label>${window.wp.i18n.__('Select One', 'tutor')}	</div>
            </div>
        </div>
        `;
		return markupDD;
	}
};

setTimeout(() => {
	selectSearchField('.tutor-form-select');
}, 10)
