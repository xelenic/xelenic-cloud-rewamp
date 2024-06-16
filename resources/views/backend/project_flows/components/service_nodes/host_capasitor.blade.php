<div class="drag-drawflow" draggable="true" ondragstart="drag(event)" data-node="cloud-capacitor">
    <i class="icon-box"></i><span> Cloud Capacitor </span>
</div>

<script>
    @push('blueprint_nodes')
    case 'cloud-capacitor':
    var facebook = `<div><div class="title-box"><i class="fab fa-facebook"></i>Cloud Capacitor</div></div>`;
    editor.addNode('cloud-capacitor', 0,  1, pos_x, pos_y, 'cloud-capacitor', {}, facebook );
    break;
    @endpush
</script>
