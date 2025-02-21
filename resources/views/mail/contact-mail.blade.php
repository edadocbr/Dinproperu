<x-mail::message>

# Nuevo mensaje para DINPRO PERU de:

<x-mail::table>
    | Nombre | Email | 
    |--------|-------|
    | {{ $data['name'] }} | {{ $data['email'] }} |
</x-mail::table>
<x-mail::table>    
    | Asunto | 
    |--------|
    |{{ $data['subject'] }}|
</x-mail::table>
<x-mail::table>
    | Mensaje |
    |---------| 
    |{{ $data['message'] }}|
</x-mail::table>

</x-mail::message>
