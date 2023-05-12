<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        section {
            padding-top: 4rem;
            padding-bottom: 5rem;
            background-color: #f1f4fa;
        }

        .wrap {
            display: flex;
            background: white;
            padding: 1rem 1rem 1rem 1rem;
            border-radius: 0.5rem;
            box-shadow: 7px 7px 30px -5px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .ico-wrap {
            margin: auto;
        }

        .mbr-iconfont {
            font-size: 4.5rem !important;
            color: #313131;
            margin: 1rem;
            padding-right: 1rem;
        }

        .vcenter {
            margin: auto;
        }

        .mbr-section-title3 {
            text-align: left;
        }

        h2 {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .display-5 {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1.4rem;
        }

        .mbr-bold {
            font-weight: 700;
        }

        p {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            line-height: 25px;
        }

        .display-6 {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1re
        }
    </style>
</head>
<body>
<section>
    <?php
//        echo '<pre>';
//        print_r($userdata); exit;
    ?>
    <div class="container">

        <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
        <div class="row mbr-justify-content-center">
            @foreach($userdata as $key)
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="text-wrap vcenter">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">{{$key->name}}</span>
                            </h2>
                            @foreach($key['deptList'] as $valuess)
                                <p class="mbr-fonts-style text1 mbr-text display-6">{{$valuess['name']}}@endforeach<br>
                                    @foreach($key['desigList'] as $valuedesig) {{$valuedesig['name']}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>

        $(document).ready(function(){

            fetch_customer_data();

            function fetch_customer_data(query = '')
            {
                $.ajax({
                    url:"{{ route('live_search.action') }}",
                    method:'GET',
                    data:{query:query},
                    dataType:'json',
                    success:function(response)
                    {
                        window.location.href = 'http://www.google.com';
                    }
                })
            }

            $(document).on('keyup', '#search', function(){
                var query = $(this).val();
                fetch_customer_data(query);
            });
        });

    </script>

</body>
</html>
