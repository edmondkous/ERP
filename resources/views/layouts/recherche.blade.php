
<div class="col-md-8 offset-md-2">
    <form action="{{ route('clients.search')}} ">
        <div class="input-group">
            <input type="text" name="q" class="form-control form-control-lg"
                    placeholder="Rechercher" value="{{request()->q ?? ''}}">

            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
