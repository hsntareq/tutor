<?php

if ( ! defined( 'ABSPATH' ) ){
    exit;
}

extract($data); // $user_id, $attempt_id, $attempt_data(nullable)

!isset($attempt_data) ? $attempt_data = tutor_utils()->get_attempt($attempt_id) : 0;

if (!$attempt_id || !$attempt_data || $user_id!=$attempt_data->user_id){
    echo '<p>'.__('Attempt not found or access permission denied', 'tutor').'</p>';
	return;
}

function show_correct_answer( $answers= array() ){
    if(!empty($answers)){

		echo '<div class="correct-answer-wrap">';
        foreach ($answers as $key => $ans) {
            $type = isset($ans->answer_view_format) ? $ans->answer_view_format : 'text_image';
            if (isset($ans->answer_two_gap_match)) { echo '<div class="matching-type">'; }
            switch ($type) {
				case 'text_image':
					echo '<div class="text-image-type">';
                        if(isset($ans->image_id)){
                            $img_url = wp_get_attachment_image_url($ans->image_id);
                            if($img_url){
                                echo '<span class="image"><img src="'.$img_url.'" /></span>';
                            }
                        }
                        if(isset($ans->answer_title)) {
                            echo '<span class="caption">'.stripslashes($ans->answer_title).'</span>';
                        }
					echo '</div>';
                    break;
                    
				case 'text':
                    if(isset($ans->answer_title)) {
                        echo '<span class="text-medium-caption color-text-primary">'
                            .stripslashes($ans->answer_title).
                        '</span>';
                    }
                    break;

				case 'image':
					echo '<div class="image-type">';
                        if(isset($ans->image_id)){
                            $img_url = wp_get_attachment_image_url($ans->image_id);
                            if($img_url){
                                echo '<span class="image"><img src="'.$img_url.'" />'.'</span>';
                            }
                        }
                    echo '</div>';
                    break;
                default:
                    break;
            }
            if (isset($ans->answer_two_gap_match)) {
                echo '<div class="matching-separator">&nbsp;-&nbsp;</div>';
                echo '<div class="image-match">'.stripslashes($ans->answer_two_gap_match).'</div>';
                echo '</div>';
			}
        }
		echo '</div>';
    }
}

$answers = tutor_utils()->get_quiz_answers_by_attempt_id($attempt_id);
$correct = 0;
$incorrect = 0;
if(is_array($answers) && count($answers) > 0) {
    foreach ($answers as $answer){
        if ( (bool) isset( $answer->is_correct ) ? $answer->is_correct : '' ) {
            $correct++;
        } else {
            if ($answer->question_type === 'open_ended' || $answer->question_type === 'short_answer'){
            } else {
                $incorrect++;
            }
        }
    }
}

$table_1_columns = array(
    'user'              => __('Attempt By', 'tutor'),
    'date'              => __('Date', 'tutor'),
    'qeustion_count'    => __('Question', 'tutor'),
    'quiz_time'         => __('Quiz Time', 'tutor'),
    'attempt_time'      => __('Attempt Time', 'tutor'),
    'total_marks'       => __('Total Marks', 'tutor'),
    'pass_marks'        => __('Pass Marks', 'tutor'),
    'correct_answer'    => __('Correct Answer', 'tutor'),
    'incorrect_answer'  => __('Incorrect Answer', 'tutor'),
    'earned_marks'      => __('Earned Marks', 'tutor'),
    'result'            => __('Result', 'tutor')
);

if(!is_admin()) {
    // Exclude some columns in frontend dashboard
    unset($table_1_columns['user']);
    unset($table_1_columns['quiz_time']);
    unset($table_1_columns['attempt_time']);
}
?>

<table class="tutor-ui-table tutor-ui-table-responsive my-quiz-attempts tutor-mb-30">
    <thead>
        <tr>
            <?php 
                foreach($table_1_columns as $key => $column) {
                    echo '<th><span class="text-regular-small color-text-subsued">'.$column.'</span></th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($table_1_columns as $key => $column): ?>
                <?php 
                    switch($key) {
                        case 'user':
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                
                            </td>
                            <?php
                            break;

                        case 'date' :
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php
                                        echo date_i18n(get_option('date_format'), strtotime($attempt_data->attempt_started_at)).' '.date_i18n(get_option('time_format'), strtotime($attempt_data->attempt_started_at));
                                    ?>
                                </span>
                            </td>
                            <?php
                            break;

                        case 'qeustion_count' :
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php echo $attempt_data->total_questions; ?>
                                </span>
                            </td>
                            <?php
                            break;

                        case 'quiz_time':
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                
                            </td>
                            <?php
                            break;

                        case 'attempt_time':
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                
                            </td>
                            <?php
                            break;
                            
                        case 'total_marks' :
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php echo $attempt_data->total_marks; ?>
                                </span>
                            </td>
                            <?php
                            break;

                        case 'pass_marks' :
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php 
                                        $pass_mark_percent = tutor_utils()->get_quiz_option($attempt_data->quiz_id, 'passing_grade', 0);
                                        echo $pass_mark_percent.'%';
                                    ?>
                                </span>
                            </td>
                            <?php
                            break;

                        case 'correct_answer' :
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php echo $correct; ?>
                                </span>
                            </td>
                            <?php
                            break;

                        case 'incorrect_answer' :
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php echo $incorrect; ?>
                                </span>
                            </td>
                            <?php
                            break;

                        case 'earned_marks' :
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php 
                                        echo $attempt_data->earned_marks; 
                                        $earned_percentage = $attempt_data->earned_marks > 0 ? ( number_format(($attempt_data->earned_marks * 100) / $attempt_data->total_marks)) : 0;
                                        echo '('.$earned_percentage.'%)';
                                    ?>
                                </span>
                            </td>
                            <?php
                            break;

                        case 'result':
                            ?>
                            <td data-th="<?php echo $column; ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php 
                                        if ($earned_percentage >= $pass_mark_percent){
                                            echo '<span class="tutor-badge-label label-success">'.__('Pass', 'tutor').'</span>';
                                        }else{
                                            echo '<span class="tutor-badge-label label-danger">'.__('Fail', 'tutor').'</span>';
                                        }
                                    ?>
                                </span>
                            </td>
                            <?php
                            break;
                    }
                ?>
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>

<?php
    if (is_array($answers) && count($answers)){
        ?>
        <strong><?php _e('Quiz Overview', 'tutor'); ?></strong>
        <table class="tutor-ui-table tutor-ui-table-responsive tutor-mb-30">
            <thead>
                <tr>
                    <th><span class="text-regular-small color-text-subsued"><?php _e('No.', 'tutor'); ?></span></th>
                    <th><span class="text-regular-small color-text-subsued"><?php _e('Type', 'tutor'); ?></span></th>
                    <th><span class="text-regular-small color-text-subsued"><?php _e('Question', 'tutor'); ?></span></th>
                    <th><span class="text-regular-small color-text-subsued"><?php _e('Given Answers', 'tutor'); ?></span></th>
                    <th><span class="text-regular-small color-text-subsued"><?php _e('Correct Answers', 'tutor'); ?></span></th>
                    <th><span class="text-regular-small color-text-subsued"><?php _e('Answer', 'tutor'); ?></span></th>
                    <?php do_action('tutor_quiz_review/thead/column'); ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    $answer_i = 0;
                    foreach ($answers as $answer){
                        $answer_i++;
                        $question_type = tutor_utils()->get_question_types($answer->question_type);
                        ?>
                        
                        <tr>
                            <td data-th="<?php _e('No.', 'tutor'); ?>">
                                <span class="text-medium-caption color-text-primary">
                                    <?php echo $answer_i; ?>
                                </span>
                            </td>
                            <td data-th="<?php _e('Type', 'tutor'); ?>">
                                <?php $type = tutor_utils()->get_question_types( $answer->question_type ); ?>
                                <div class="tooltip-wrap tooltip-icon-">
                                    <?php echo $question_type['icon']; ?>
                                    <span class="tooltip-txt tooltip-top">
                                        <?php echo $type['name']; ?>
                                    </span>
                                </div>
                            </td>
                            <td data-th="<?php _e('Question', 'tutor'); ?>">
                                <span class="text-medium-small">
                                    <?php echo stripslashes($answer->question_title); ?>
                                </span>
                            </td>
                            <td data-th="<?php _e('Given Answers', 'tutor'); ?>">
                                <?php
                                    // True false or single choise
                                    if ($answer->question_type === 'true_false' || $answer->question_type === 'single_choice' ){
                                        $get_answers = tutor_utils()->get_answer_by_id($answer->given_answer);
                                        $answer_titles = wp_list_pluck($get_answers, 'answer_title');
                                        $answer_titles = array_map('stripslashes', $answer_titles);
                                        
                                        echo '<span class="text-medium-caption color-text-primary">'.implode('</p><p>', $answer_titles).'</span>';
                                    } 
                                
                                    // Multiple choice
                                    elseif ($answer->question_type === 'multiple_choice'){
                                        $get_answers = tutor_utils()->get_answer_by_id(maybe_unserialize($answer->given_answer));
                                        $answer_titles = wp_list_pluck($get_answers, 'answer_title');
                                        $answer_titles = array_map('stripslashes', $answer_titles);

                                        echo '<p class="text-medium-caption color-text-primary">'.implode('</p><p>', $answer_titles).'</p>';
                                    }
                                
                                    // Fill in the blank
                                    elseif ($answer->question_type === 'fill_in_the_blank'){
                                        $answer_titles = maybe_unserialize($answer->given_answer);
                                        $get_db_answers_by_question = tutor_utils()->get_answers_by_quiz_question($answer->question_id);

                                        // Loop through the answers
                                        foreach ($get_db_answers_by_question as $db_answer){
                                            $count_dash_fields = substr_count($db_answer->answer_title, '{dash}');
                                            
                                            if ($count_dash_fields){
                                                $dash_string = array();
                                                $input_data = array();
                                                for($i=0; $i<$count_dash_fields; $i++){
                                                    $input_data[] =  isset($answer_titles[$i]) ? "<span class='filled_dash_unser'>{$answer_titles[$i]}</span>" : "______";
                                                }
                                                $answer_title = $db_answer->answer_title;
                                                foreach($input_data as $replace){
                                                    $answer_title = preg_replace('/{dash}/i', $replace, $answer_title, 1);
                                                }
                                                echo str_replace('{dash}', '_____', stripslashes($answer_title));
                                            }
                                        }
                                    }
                                
                                    // Open ended or short answer
                                    elseif ($answer->question_type === 'open_ended' || $answer->question_type === 'short_answer'){
                                        if ($answer->given_answer){
                                            echo wpautop(stripslashes($answer->given_answer));
                                        }
                                    }
                                
                                    // Ordering
                                    elseif ($answer->question_type === 'ordering'){
                                        $ordering_ids = maybe_unserialize($answer->given_answer);
                                        foreach ($ordering_ids as $ordering_id){
                                            $get_answers = tutor_utils()->get_answer_by_id($ordering_id);
                                            $answer_titles = wp_list_pluck($get_answers, 'answer_title');
                                            $answer_titles = array_map('stripslashes', $answer_titles);
                                            echo '<p>'.implode('</p><p>', $answer_titles).'</p>';
                                        }
                                    }
                                
                                    // Matching
                                    elseif ($answer->question_type === 'matching'){

                                        $ordering_ids = maybe_unserialize($answer->given_answer);
                                        $original_saved_answers = tutor_utils()->get_answers_by_quiz_question($answer->question_id);

                                        foreach ($original_saved_answers as $key => $original_saved_answer){
                                            $provided_answer_order_id = isset($ordering_ids[$key]) ? $ordering_ids[$key] : 0;
                                            $provided_answer_order = tutor_utils()->get_answer_by_id($provided_answer_order_id);
                                            if(tutor_utils()->count($provided_answer_order)){
                                                foreach ($provided_answer_order as $provided_answer_order);
                                                echo stripslashes($original_saved_answer->answer_title)  .' - '. stripslashes($provided_answer_order->answer_two_gap_match).'<br />';
                                            }
                                        }
                                    }
                                
                                elseif ($answer->question_type === 'image_matching'){

                                    $ordering_ids = maybe_unserialize($answer->given_answer);
                                    $original_saved_answers = tutor_utils()->get_answers_by_quiz_question($answer->question_id);

                                    echo '<div class="answer-image-matched-wrap">';
                                    foreach ($original_saved_answers as $key => $original_saved_answer){
                                        $provided_answer_order_id = isset($ordering_ids[$key]) ? $ordering_ids[$key] : 0;
                                        $provided_answer_order = tutor_utils()->get_answer_by_id($provided_answer_order_id);
                                        foreach ($provided_answer_order as $provided_answer_order);
                                        ?>
                                        <div class="image-matching-item">
                                            <p class="dragged-img-rap"><img src="<?php echo wp_get_attachment_image_url( $original_saved_answer->image_id); ?>" /> </p>
                                            <p class="dragged-caption"><?php echo stripslashes($provided_answer_order->answer_title); ?></p>
                                        </div>
                                        <?php
                                    }
                                    echo '</div>';
                                }elseif ($answer->question_type === 'image_answering'){

                                    $ordering_ids = maybe_unserialize($answer->given_answer);

                                    echo '<div class="answer-image-matched-wrap">';
                                    foreach ($ordering_ids as $answer_id => $image_answer){
                                        $db_answers = tutor_utils()->get_answer_by_id($answer_id);
                                        foreach ($db_answers as $db_answer);
                                        ?>
                                        <div class="image-matching-item">
                                            <p class="dragged-img-rap"><img src="<?php echo wp_get_attachment_image_url( $db_answer->image_id); ?>" /> </p>
                                            <p class="dragged-caption"><?php echo $image_answer; ?></p>
                                        </div>
                                        <?php
                                    }
                                    echo '</div>';
                                }

                                ?>
                            </td>

                            <td data-th="<?php _e('Correct Answers', 'tutor'); ?>">
                                <?php
                                if (($answer->question_type != 'open_ended' && $answer->question_type != 'short_answer')) {

                                    global $wpdb;
                                    if ( $answer->question_type === 'true_false' ) {
                                        $correct_answer = $wpdb->get_var( $wpdb->prepare( 
                                            "SELECT answer_title FROM {$wpdb->prefix}tutor_quiz_question_answers 
                                            WHERE belongs_question_id = %d AND is_correct = 1", 
                                            $answer->question_id 
                                        ) );

                                        echo '<span class="text-medium-caption color-text-primary">' . $correct_answer . '</span>';
                                    } 
                                    
                                    elseif ( $answer->question_type === 'single_choice' ) {
                                        $correct_answer = $wpdb->get_results( $wpdb->prepare( 
                                            "SELECT answer_title, image_id, answer_view_format 
                                            FROM {$wpdb->prefix}tutor_quiz_question_answers 
                                            WHERE belongs_question_id = %d AND 
                                                is_correct = 1", 
                                                $answer->question_id 
                                            ) );

                                        show_correct_answer($correct_answer);
                                    } 
                                    
                                    elseif ( $answer->question_type === 'multiple_choice' ) {
                                        $correct_answer = $wpdb->get_results( $wpdb->prepare( "SELECT answer_title, image_id, answer_view_format FROM {$wpdb->prefix}tutor_quiz_question_answers WHERE belongs_question_id = %d AND is_correct = 1 ;", $answer->question_id ) );
                                        show_correct_answer($correct_answer);

                                    } elseif ( $answer->question_type === 'fill_in_the_blank' ) {
                                        $correct_answer = $wpdb->get_var( $wpdb->prepare( "SELECT answer_two_gap_match FROM {$wpdb->prefix}tutor_quiz_question_answers WHERE belongs_question_id = %d", $answer->question_id ) );
                                        if($correct_answer){
                                            echo implode(', ', explode('|', stripslashes($correct_answer)));
                                        }

                                    } elseif ( $answer->question_type === 'ordering' ) {
                                        $correct_answer = $wpdb->get_results( $wpdb->prepare( "SELECT answer_title, image_id, answer_view_format FROM {$wpdb->prefix}tutor_quiz_question_answers WHERE belongs_question_id = %d ORDER BY answer_order ASC;", $answer->question_id ) );
                                        show_correct_answer($correct_answer);

                                    } elseif( $answer->question_type === 'matching' ){
                                        $correct_answer = $wpdb->get_results( $wpdb->prepare( "SELECT answer_title, image_id, answer_two_gap_match, answer_view_format FROM {$wpdb->prefix}tutor_quiz_question_answers WHERE belongs_question_id = %d ORDER BY answer_order ASC;", $answer->question_id ) );
                                        show_correct_answer($correct_answer);

                                    } elseif( $answer->question_type === 'image_matching' ) {
                                        $correct_answer = $wpdb->get_results( $wpdb->prepare( "SELECT answer_title, image_id, answer_two_gap_match FROM {$wpdb->prefix}tutor_quiz_question_answers WHERE belongs_question_id = %d ORDER BY answer_order ASC;", $answer->question_id ) );
                                        show_correct_answer($correct_answer);
                                    }
                                }
                                ?>
                            </td>

                            <td data-th="<?php _e('Answer', 'tutor'); ?>">
                                <?php

                                if ( (bool) isset( $answer->is_correct ) ? $answer->is_correct : '' ) {
                                    echo '<span class="tutor-badge-label label-success">'.__('Correct', 'tutor').'</span>';
                                } else {
                                    if ($answer->question_type === 'open_ended' || $answer->question_type === 'short_answer'){
                                        if ( (bool) $attempt->is_manually_reviewed && (!isset( $answer->is_correct ) || $answer->is_correct == 0 )) {
                                            echo '<span class="tutor-badge-label label-danger">'.__('Wrong', 'tutor').'</span>';
                                        } else {
                                            echo '<span class="tutor-badge-label label-warning">'.__('Pending', 'tutor').'</span>';
                                        }
                                    } else {
                                        echo '<span class="tutor-badge-label label-danger">'.__('Wrong', 'tutor').'</span>';
                                    }
                                }
                                ?>
                            </td>
                            <?php do_action('tutor_quiz_review/tbody/column', $attempt); ?>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <?php
    }
?>