<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" value="{{ old('nome') }}" type="text" placeholder="Name" class="black-border">
    @if($errors->has('name'))
        {{ $errors->first('name') }}
    @endif
    <br>
    <input name="phone" value="{{ old('phone') }}" type="text" placeholder="Phone" class="black-border">
    {{ $errors->has('phone') ? $errors->first('phone') : '' }}
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="black-border">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>

    <select name="contacts_reason_id" class="black-border">
        <option value="">What is the reason for the contact?</option>
        
        @foreach($contact_reasons as $key => $contact_reason)
            <option value="{{$contact_reason->id}}" {{ old('contacts_reason_id') == $contact_reason->id ? 'selected' : '' }}>{{$contact_reason->contact_reason}}</option>
        @endforeach

    </select>
    {{ $errors->has('contacts_reason_id') ? $errors->first('contacts_reason_id') : '' }}
    <br>
    <textarea name="message" class="black-border">{{ (old('message') != '') ? old('message') : 'Fill your message here...' }} </textarea>
    {{ $errors->has('message') ? $errors->first('message') : '' }}
    <br>
    <button type="submit" class="black-border">SUBMIT</button>

</form>

@if($errors->any())
    <div style="position: absolute; top:0px; left:0px; width:100%; background:red;">
       
        @foreach($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach

    </div>
@endif