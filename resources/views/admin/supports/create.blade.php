<h1>Nova Dúvida</h1>

@if ($errors->any())
  @foreach ($errors->all() as $error)
    {{ $error }}
  @endforeach
@endif

<form action="{{ route('supports.store') }}" method="post">
  @csrf
  <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Assunto" id="subject">
  <textarea name="body" id="body" cols="30" rows="5" placeholder="Descrição">{{ old('body') }}</textarea>
  <button type="submit">Enviar</button>
</form>
