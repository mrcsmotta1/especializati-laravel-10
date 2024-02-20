@csrf
<input type="text" name="subject" value="{{ $support->subject ?? old('subject') }}" placeholder="Assunto" id="subject">
<textarea name="body" id="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body ?? old('body') }}</textarea>
<button type="submit">Enviar</button>
