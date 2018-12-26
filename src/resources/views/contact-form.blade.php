<form method="post" action="{{ route('contact.post') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">@lang('contact::contact-form.email_label')</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="@lang('contact::contact-form.email_placeholder')" name="email">
        <small id="emailHelp" class="form-text text-muted">@lang('contact::contact-form.email_help')</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">@lang('contact::contact-form.name_label')</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="@lang('contact::contact-form.name_placeholder')" name="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">@lang('contact::contact-form.message_label')</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">@lang('contact::contact-form.button_submit')</button>
</form>