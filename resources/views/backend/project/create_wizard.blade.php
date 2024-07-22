<!-- Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Get this party started?</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div id="example-basic">
                <h3>Keyboard</h3>
                <section>
                    <p>Try the keyboard navigation by clicking arrow left or right!</p>
                </section>
                <h3>Effects</h3>
                <section>
                    <p>Wonderful transition effects.</p>
                </section>
                <h3>Pager</h3>
                <section>
                    <p>The next and previous buttons help you to navigate through your content.</p>
                </section>
            </div>
            <div class="modal-footer">
                <button class="btn btn-text-primary me-2" type="button" data-bs-dismiss="modal">Close</button>
                <button onclick="appendDetails()" class="btn btn-text-primary" type="button">Save changes</button>
            </div>

            <script>

            </script>


        </div>
    </div>
</div>

<script>

    function loadScript(url) {
        return new Promise(function(resolve, reject) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = url;

            script.onload = function() {
                resolve();
            };

            script.onerror = function() {
                reject(new Error("Failed to load script: " + url));
            };

            document.head.appendChild(script);
        });
    }


    function loadScriptsInParallel(urls) {
        return Promise.all(urls.map(function(url) {
            return loadScript(url);
        }));
    }





    function appendDetails()
    {
        // Example usage:
        loadScriptsInParallel([
            "https://code.jquery.com/jquery-3.7.1.min.js",
            "{{url('dashboard_res/jquery.steps.min.js')}}",
        ]).then(function() {
            console.log("All scripts loaded!");
        }).catch(function(error) {
            console.error(error);
        });


        $("#example-basic").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true
        });
    }



</script>





</script>
