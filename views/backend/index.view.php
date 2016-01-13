<h2><?php echo __('Toggle', 'toggle'); ?></h2>
<br />
<?php echo
    Form::open() .
    Form::hidden('csrf', Security::token());
?>

<div class="row">
    <div class="col-md-6">
        <?php echo
            Form::label('toggle_duration', __('Slide duration [ms]', 'toggle')) .
            Form::input('toggle_duration', Option::get('toggle_duration'), array('class' => 'form-control'));
        ?>
    </div>
    <div class="col-md-6">
        <?php echo
            Form::label('toggle_easing', __('Slide easing', 'toggle')) .
            Form::select('toggle_easing', array('linear' => 'linear', 'swing' => 'swing'), Option::get('toggle_easing'), array('class' => 'form-control'));
        ?>
    </div>
</div>
<br />

<?php echo
    Form::submit('toggle_submitted', __('Save', 'toggle'), array('class' => 'btn btn-phone btn-primary')) .
    Form::close();
?>