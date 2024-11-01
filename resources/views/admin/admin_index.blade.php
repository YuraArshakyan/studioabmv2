@extends('admin.admin_layout.admin_index')
@section('title', 'Submited-Forms')
@section('content')  
    <div class="services_head">
        <h1>
            Submited Forms
        </h1>
    </div>
    <div class="container min_height_80vh">
        <label class="text-center">Submited Forms: {{$forms_count}} | </label>
        <label  class="text-center">Today Submited Forms: {{$today_forms}} | </label>
        <label  class="text-center">Yesterday Submited Forms: {{$yesterday_forms}} | </label>
        <form action={{url('/exportForms')}} method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-outline-info w-100 exportButton">Export all to excel</button>
        </form>
        <div class="responsiv_table">
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
                    <th scope="col">action</th>
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

                                <td class=""><button type="submit" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection