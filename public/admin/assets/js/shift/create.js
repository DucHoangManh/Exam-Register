$(document).ready(function() {
	$('.shift-input').change(function() {
		$date = $('input[name*="date"]').val();
		$start = $('input[name*="start"]').val();
		$end = $('input[name*="end"]').val();
		$('input[name*="code"]').val(getShiftCode($date, $start, $end));
	});

	function getDate($date) {
		$d = new Date($date);
		return ($d.getDay() == 0) ? 'CN' : 'T' + ($d.getDay()+1);
	}

	function getHour($time) {
		$hour = $time.substr(0, 2);
		return $hour - 6;
	}

	function getShiftCode($date, $start, $end) {
		return getDate($date) + '-(' + getHour($start) + '-' + getHour($end) + ')';
	}

	function validateForm() {
		$date = $('input[name*="date"]').val();
		$start = $('input[name*="start"]').val();
		$end = $('input[name*="end"]').val();
		$result = true;

		if (getHour($start) < getHour($end)) {
			$('.time-error').html('');
		} else {
			$('.time-error').html('Khoảng thời gian không hợp lệ');
			$result =  false;
		}

		if($date != '') {
			$('.date-error').html('');
		} else {
			$('.date-error').html('Không được để trống');
			$result = false;
		}
		return $result;
	}

	$('#shift-create-form').submit(function(event) {
		if(!validateForm()) {
			event.preventDefault();
		}
	});
});