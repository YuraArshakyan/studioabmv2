<table class="table table-dark table-hover mt-3" id="submissionTable">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">status</th>
        <th scope="col">sent_to_reserve_email</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">message</th>
        <th scope="col">created_at</th>
        </tr>
    </thead>
    <tbody>
        @foreach($forms as $forms)
            <form action={{url('/destroyData' .'/' . $forms->id)}} method="POST">
                @csrf
                <tr>
                    <th class="" scope="row">{{$forms->id}}</th>
                    <th class="">{{$forms->status}}</th>
                    <th class="">{{$forms->sent_to_reserve_email}}</th>
                    <td class="">{{($forms->Name) ? $forms->Name : 'NULL'}}</td>
                    <td class="">{{($forms->email) ? $forms->email : 'NULL'}}</td>
                    <td class="">{{($forms->Phone) ? $forms->Phone : 'NULL'}}</td>
                    <td class="">{{($forms->Message) ? $forms->Message : 'NULL'}}</td>
                    <td class="">{{($forms->created_at) ? $forms->created_at : 'NULL'}}</td>
                </tr>
            </form>
        @endforeach
    </tbody>
</table>