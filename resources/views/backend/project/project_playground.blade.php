@extends('backend.project.components.layout')
@section('project_content')

        <div class="tab-content" id="myTabContent">

            @include('backend.project.main_tabs.console')

            @include('backend.project.main_tabs.addins')

            @include('backend.project.main_tabs.settings')

        </div>

@endsection



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to activate tab based on id
        function activateTab(tabId) {
            var tabElement = $('#' + tabId + '-tab');
            if (tabElement.length) {
                tabElement.tab('show');
            }
        }

        // On page load, check if there's a stored tab in localStorage
        var storedTab = localStorage.getItem('activeTab');
        if (storedTab) {
            activateTab(storedTab);
        }

        // Store the active tab in localStorage when a tab is shown
        $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
            var activeTabId = $(e.target).attr('id').replace('-tab', '');
            localStorage.setItem('activeTab', activeTabId);
        });
    });
</script>
