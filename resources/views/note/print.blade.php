<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parchi Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    * {
        font-size: 12px
    }

    .w p {
        line-height: 0.5;
    }

    .d p {
        line-height: 0.5;

    }

    .s p {
        line-height: 1.0;
    }
</style>

<body>

    <h1 class="p-2 text-center border-bottom  border-2"> <b>नागर पालिका आम निर्वाचन , (बिहार)</b></h1>

    <div class="row">
        @foreach ($data as $d)
            <div class="col-6 mt-4">
                <div class="card p-2">
                    <div class="row w">
                        <div class="col-6">
                            <p><b>नगर निगम, {{$d->nirwachan_name}}</b></p>
                            <p><b>क्रमांक :{{ $d->s_no}}</b></p>
                        </div>
                        <div class="col-6 ">
                            <p class=""><b>वार्ड संख्या :{{$d->data}}</b></p>
                            <p class=""><b>{{ $d->epic}}</b> </p>
                        </div>
                    </div>

                    <div class="row s">
                        <div class="col-9">
                            <div class="">
                                <h4 class="text-danger">निर्वाचक का नाम : {{ $d->nirwachan_name}}</h4>
                                <h6><b>  {{ $d->relative_name}}</b></h6>
                                <p class="text-danger">उम : {{$d->age}}</p>
                                <div class="row d">
                                    <div class="col-6">
                                        <p class="text-danger">गृह सांख्य : {{$d->house}}</p>

                                    </div>
                                    <div class="col-6 ">
                                        <p class=" text-danger">लिंग: {{$d->gender}}</p>
                                    </div>
                                </div>
                                <p> <b>मतदान का तरीक : 09-06-2023</b>
                                </p>
                                <p> <b> मतदान का सांख्य वा नाम :- {{$d->both}} ||
                                    * मतदपतप ससचच पगष ससखखप 2 और कम ससखखप 1 पर दख</b>
                            </div>


                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/images/profile/avtar.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</body>

</html>

<script>
    print();
</script>
