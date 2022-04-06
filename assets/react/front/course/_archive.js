
const pushFilterToState=data=>{

	console.log(data);

	const url = new URL(window.location);
	const params = getAllUrlParamas();

	for(let k in params){
		url.searchParams.delete(k);
	}
	
	for(let k in data) {
		let is_array = Array.isArray(data[k]);
		let key = is_array ? k+'[]' : k;
		let values = is_array ? data[k] : [data[k]];

		values.forEach(v=>{
			url.searchParams.append(key, v);
		});
	}
	
	window.history.pushState({}, '', url);
}

const getAllUrlParamas=()=>{
	let param_array = {};

	new URL(window.location).searchParams.forEach(function (value, key) {
		if(key.slice(-2)=='[]') {
			let name = key.slice(0, -2);
			!param_array[name] ? param_array[name]=[] : 0;
			!Array.isArray(param_array[name]) ? param_array[name]=[param_array[name]] : 0;
			param_array[name].push(value);
		} else {
			param_array[key]=value;
		}
	});

	return param_array;
}

const renderFilterFromState=(filter_container)=>{
	let filters = getAllUrlParamas();

	for(let k in filters){
		let value = filters[k];

		if(Array.isArray(value)) {
			filter_container.find('[name="'+k+'"]').each(function(){
				let checked = value.indexOf(window.jQuery(this).attr('value'))>-1;
				window.jQuery(this).prop('checked', checked);
			});
		} else {
			filter_container.find('[name="'+k+'"]').val(value);
		}
	}
}

window.jQuery(document).ready($=>{
    const {__} = window.wp.i18n;

	/**
	 * Manage course filter
	 *
	 * @since  v.1.7.2
	 */
	var filter_container = $('.tutor-course-filter-container form');
	var loop_container = $('.tutor-course-filter-loop-container');
	var archive_meta = $('.tutor-courses-wrap').data('tutor_courses_meta') || {};
	var filter_modifier = {};

	// Sidebar checkbox value change
	filter_container
		.on('submit', function (e) {
			e.preventDefault();
			console.log('Course filter form submission prevented');
		})
		.find('input')
		.change(function (e) {
			ajaxFilterArchive();
		});

	if(filter_container.length){
		renderFilterFromState(filter_container);
		window.addEventListener('popstate', ()=>{
			renderFilterFromState(filter_container);
			ajaxFilterArchive(false);
		});
	}

	const ajaxFilterArchive = (push_state=true) => {
		var filter_criteria = Object.assign(filter_container.serializeObject(), filter_modifier, archive_meta);
		filter_criteria.current_page = 1;
		filter_criteria.action = 'tutor_course_filter_ajax';

		if(push_state){
			pushFilterToState(filter_criteria);
		}
		
		loop_container.html('<div style="background-color: #fff;" class="loading-spinner"></div>');
		$(this)
			.closest('form')
			.find('.tutor-clear-all-filter')
			.show();

		$.ajax({
			url: window._tutorobject.ajaxurl,
			type: 'POST',
			data: filter_criteria,
			success: function (r) {
				if(!r.success){
					loop_container.html(__('Could not load courses', 'tutor'));
					return;
				}

				loop_container.html(r.data.html).find('nav').css('display', 'flex');
			}
		});
	}
});

// Reusable for Instructor list filter
export {pushFilterToState, renderFilterFromState}