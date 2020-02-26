
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Add New Post</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tile">Ttile</label>
                            <input name="title" type="text" class="form-control">
                            <label for="body">Body</label>
                            <input name="body" type="text" class="form-control">
                        </div>
                        <input type="submit" value="Create" class="btn btn-info">
                </form>
                </div>
                
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>