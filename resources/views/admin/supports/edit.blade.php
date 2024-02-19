<h1>Dúvida {{ $support->id }}</h1>

@if ($errors->any())
  @foreach ($errors->all() as $error)
    {{ $error }}
  @endforeach
@endif


<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf
    @method('PUT')
  <input type="text" name="subject" placeholder="Assunto" id="subject" value="{{ $support->subject }}">
  <textarea name="body" id="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body }}</textarea>
  <button type="submit">Enviar</button>
</form>
