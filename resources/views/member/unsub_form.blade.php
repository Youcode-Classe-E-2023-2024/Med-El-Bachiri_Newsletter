<form action="{{ route('unsubscribe', ['email' => $email]) }}" method="POST" class="unsubscribe-form">
    @csrf
    @method('PUT')
    <input type="hidden" name="email" value="{{ $email }}">
    <button type="submit" class="button unsubscribe-button">Unsubscribe</button>
</form>
