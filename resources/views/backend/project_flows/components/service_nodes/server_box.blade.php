<div class="drag-drawflow" draggable="true" ondragstart="drag(event)" data-node="bucket_server">
    <i class="icon-box"></i><span> Bucket Server</span>
</div>

<script>
    @push('blueprint_nodes')
        case 'bucket_server':
        var facebook = `<div><div class="title-box"><i class="fab fa-facebook"></i>Bucket Server</div></div>`;
        editor.addNode('bucket_server', 1,  1, pos_x, pos_y, 'bucket_server', {}, facebook );
        break;
    @endpush
</script>
