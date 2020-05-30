{!! Form::model($model, ['url' => $form_url, 'style' => 'display:inline', 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!}
    <a class="btn btn-warning btn-xs" href="{{ $edit_url }}">Ubah</a>
    {!! Form::submit('Hapus', ['class' => 'btn btn-xs btn-danger']) !!}
{!! Form::close() !!}

@if($toggleUserUrl ?? false)
{!! Form::model($model, ['url' => $toggleUserUrl, 'style' => 'display:inline', 'method' => 'post', 'class' => 'form-inline js-confirm', 'data-confirm' => 'Ganti status user ?']) !!}
    {!! Form::submit('Ubah Status', ['class' => 'btn btn-xs btn-success']) !!}
{!! Form::close() !!}
@endif
