<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parchi for - {{ request()->print_for_label }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    * {
        font-size: 12px
    }

    .w p {
        line-height: 0.4;
    }

    .nir b{
        line-height: 0.9 !important;
    }

    .d p {
        line-height: 0.3;

    }

    .s p,h4 {
        line-height: 0.4;
    }

    .custom-m {
        margin-top: 15.5px;
    }

    .h1 b {
        font-size: 20px;
    }

    .nirwachan {
        font-size: 16px;
        font-weight: bold
    }
    .mat b{
        line-height: 1.0;
    }
</style>

<body>
    <h1 class="p-2 text-center border-bottom  border-2 font-xl h1"> <b>{{ request()->print_for_label }} </b></h1>
    <div class="row ">
        @foreach ($data as $d)
            <div
                class=" @if (request()->format == '12') col-4 @elseif (request()->format == '10') col-6 mt-4  @else col-6 mt-4 @endif  custom-m ">
                <div class="card p-2 pt-2">
                    <div class="row w">
                        <div class="col-6">
                            <p class="nir"><b>लोकसभा: {{ request()->print_for_label }}</b></p>
                            <p><b>क्रमांक :{{ $d->s_no }}</b></p>
                        </div>
                        <div class="col-6 ">
                            <p class=""><b>भागसंख्या :{{ $d->part }}</b></p>
                            @if (request()->epic == 'with')
                                <p class=""><b>{{ $d->epic }}</b> </p>
                            @endif
                        </div>
                    </div>

                    <div class="row s">
                        <div class=" @if (request()->format == '12') col-12 @else col-9 @endif">
                            <div class="">
                                <h4 class="text-danger">निर्वाचक का नाम : <span
                                        class="nirwachan">{{ $d->nirwachan_name }}</span></h4>
                                <h5><b> {{ $d->relative_name }}</b></h5>
                                <p class="text-danger">उम : {{ $d->age }}</p>
                                <div class="row d">
                                    <div class="col-6">
                                        <p class="text-danger">गृह सांख्य :
                                            {{ str_replace('मकान संख्या :', '', $d->house) }}</p>

                                    </div>
                                    <div class="col-6 ">
                                        <p class=" text-danger">लिंग: {{ str_replace('लिंग :', '', $d->gender) }}</p>
                                    </div>
                                </div>
                                </p>
                                <p class="mat"> <b> मतदान का सांख्य वा नाम :- {{ $d->both }}   <br> मतदान का तारीख : 16-05-2023 </b> 
                                        
                                       </b> </p>
                                       <p class="text-center"><small> * मतदाता पृष्ठ संख्या 2 और क्रम स0 पर 1  पर देखे </small></p>

                            </div>


                        </div>
                        @if (request()->format != '12')
                            {{-- <div class="col-3">
                                <img width="100px" src="{{ asset('assets/images/profile/avtar.jpg') }}"
                                    class="img-fluid" alt="">
                            </div> --}}
                        @endif
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
