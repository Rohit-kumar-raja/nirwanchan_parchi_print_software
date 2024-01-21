<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parchi for - {{ request()->print_for_label }} Assembly - {{ request()->assembly_name}}</title>

</head>
<style>
    th {
        text-transform: capitalize;
    }

    table,
    td,
    th {
        border: 1px solid;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
    h2{
        text-align: center;
        border-bottom: 1px solid 
    }
</style>

<body>

    <h2 class="p-2 text-center border-bottom  border-2"> <b>{{ request()->print_for_label }} </b></h2>


    <table class=" datatable table table-striped " id="tblData">
        <thead>
            <tr class="light">
            <tr>
                <th>S.no</th>
                <th>page</th>
                <th>data</th>
                <th>s_no</th>
                <th>loksabha name</th>
                <th>assembly name</th>
                <th>both</th>
                <th>part</th>
                <th>section</th>
                <th>epic</th>
                <th>nirwachan name</th>
                <th>relative name</th>
                <th>age</th>
                <th>house</th>
                <th>gender</th>
                <th>nirvachan name eng</th>
                <th>relative name eng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $d)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $d->page }}</td>
                    <td>{{ $d->data }}</td>
                    <td>{{ $d->s_no }}</td>
                    <td>{{ $d->loksabha_name }}</td>
                    <td>{{ $d->assembly_name }}</td>
                    <td>{{ $d->botd }}</td>
                    <td>{{ $d->part }}</td>
                    <td>{{ $d->section }}</td>
                    <td>{{ $d->epic }}</td>
                    <td>{{ $d->nirwachan_name }}</td>
                    <td>{{ $d->relative_name }}</td>
                    <td>{{ $d->age }}</td>
                    <td>{{ $d->house }}</td>
                    <td>{{ $d->gender }}</td>
                    <td>{{ $d->nirvachan_name_eng }}</td>
                    <td>{{ $d->relative_name_eng }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <script>
        print();
    </script>
