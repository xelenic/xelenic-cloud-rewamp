<div class="drag-drawflow" draggable="true" ondragstart="drag(event)" data-node="log-service">
    <i class="icon-box"></i><span> Log Service </span>
</div>

<script>
    @push('blueprint_nodes')
    case 'log-service':
    var facebook = `<div><div class="title-box"><i class="fab fa-facebook"></i>Log Service</div></div>`;
    editor.addNode('log-service', 0,  1, pos_x, pos_y, 'log-service', {}, facebook );
    break;
    @endpush
</script>
