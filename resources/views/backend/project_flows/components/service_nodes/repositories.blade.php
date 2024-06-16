<div class="drag-drawflow" draggable="true" ondragstart="drag(event)" data-node="repo">
    <i class="icon-book"></i><span> Repositories</span>
</div>


<script>
    @push('blueprint_nodes')
        case 'repo':
        var facebook = `
<div>
<div class="title-box" style="
    font-size: 12px;
    height: 42px;
"><i class="fab fa-facebook"></i> Repositories</div>
<div class="card-body" style="
    padding-top: 20px;
    padding-bottom: 30px;
">
     <div class="form-group" style="
    font-size: 12px;
">
        <label for="repo_type">Repository</label>
        <select class="form-control" id="repo_type" style="
    padding-top: initial;
    font-size: 13px;
">
            @if(\App\Models\Repos::where('user_id', Auth::user()->id)->count() > 0)
                @foreach(\App\Models\Repos::where('user_id', Auth::user()->id)->get() as $repo)
                    <option value="git">{{$repo->name}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

</div>`;
        editor.addNode('repo', 0,  1, pos_x, pos_y, 'repo', {}, facebook );
        break;
    @endpush
</script>
