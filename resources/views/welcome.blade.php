<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-12 pull-right">
                        <a href="{{ route('get.pdf') }}" class="btn btn-block btn-primary">PDF出力</a>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
</html>
