@section('table')
    <main>
        <div class="mb-2 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <form action="/clients" method="GET" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nick" name="nick">
                                <label for="floatingInput" class="text-align:center;">Nickname</label>
                            </div>
                            <input type="submit" class="w-100 btn btn-lg btn-primary"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
