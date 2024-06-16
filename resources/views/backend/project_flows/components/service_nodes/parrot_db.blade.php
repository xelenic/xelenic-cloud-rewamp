<div class="drag-drawflow" draggable="true" ondragstart="drag(event)" data-node="parrot-db">
    <i class="icon-box"></i><span> Parrot-DB </span>
</div>

<script>
    @push('blueprint_nodes')
    case 'parrot-db':
    var facebook = `<div><div class="title-box"><i class="fab fa-facebook"></i>Parrot DB</div></div>`;
    editor.addNode('parrot-db', 0,  1, pos_x, pos_y, 'parrot-db', {}, facebook );
    break;
    @endpush
</script>
