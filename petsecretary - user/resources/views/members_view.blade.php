<html> 
    <head> 
        <title>View Member Records</title>
    </head> 
    <body>
        <h1>Viewing Members Table</h1> 
        <table border=1> 
        <tr>
            <td>UID</td> 
            <td>email</td> 
            <td>Gender</td> 
            <td>BirthYear</td> 
            <td>SubscriptionYear</td>
        </tr> 
        @foreach ($members as $member) 
        <tr>
            <td>{{ $member->UID }}</td> 
            <td>{{ $member->email }}</td> 
            <td>{{ $member->Gender }}</td> 
            <td>{{ $member->BirthYear }}</td> 
            <td>{{ $member->SubscriptionYear }}</td>
        </tr> 
        @endforeach
        </table> 
    </body> 
</html>