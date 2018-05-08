<!-- Alert OK -->

<div class="modal fade alert-ok" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-1">
            <div class="modal-header border-0">
                <h5></h5>
                <button type="button" class="close display-5" data-dismiss="modal" aria-label="Close">
                    <span class="align-text-top" aria-hidden="true" style="line-height: 1rem;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <i class="fa fa-check-circle-o fa-5x text-success" aria-hidden="true"></i>
                <h1 class="mt-4">Form data successfully saved</h1>
            </div>
            <div class="modal-footer border-0">
            </div>
        </div>
    </div>
</div>

<!-- Alert Failed -->

<div class="modal fade alert-fail" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-1">
            <div class="modal-header border-0">
                <h5></h5>
                <button type="button" class="close display-5" data-dismiss="modal" aria-label="Close">
                    <span class="align-text-top" aria-hidden="true" style="line-height: 1rem;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <i class="fa fa-times-circle-o fa-5x text-danger" aria-hidden="true"></i>
                <h1 class="mt-4">Form data not saved</h1>
            </div>
            <div class="modal-footer border-0">
            </div>
        </div>
    </div>
</div>

<!-- Popup Welcome -->

<div class="modal fade" id="pop-welcome" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-1 pb-0">
            <div class="modal-header border-0">
                <h5></h5>
                <button type="button" class="close display-5" data-dismiss="modal" aria-label="Close">
                    <span class="align-text-top" aria-hidden="true" style="line-height: 1rem;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0 pb-4">
                <h1 class="my-0">Welcome to Agent Console</h1>
                <p>Please select your agent number and extension.</p>

                <form>
                    <div class="form-group w-50 mx-auto">
                        <label for="agentselect1" class="text-uppercase">Agent Number</label>
                        <select class="selectpicker" name="agentselect1" id="agentselect">
                            <option selected="selected">Agent 188</option>
                            <option>Agent 189</option>
                            <option>Agent 190</option>
                        </select>
                    </div>
                    <div class="form-group w-50 mx-auto">
                        <label for="agentselect2" class="text-uppercase">Extension</label>
                        <select class="selectpicker" name="agentselect2" id="agentselect">
                            <option selected="selected">SIP/188</option>
                            <option>SIP/189</option>
                            <option>SIP/190</option>
                        </select>
                    </div>
                    <button class="btn btn-primary rounded my-4 px-5">Sign in</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Popup Note -->

<div class="modal fade" id="pop-note" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-1 pb-0">
            <div class="modal-header border-0 bg-primary">
                <h4 class="text-center w-100 text-white">Note</h4>
                <button type="button" class="close display-5" data-dismiss="modal" aria-label="Close">
                    <span class="align-text-top text-white" aria-hidden="true" style="line-height: 1rem;">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-4 pb-4">

                <form>
                    <div class="form-group mb-4">
                        <label for="note-name" class="text-uppercase">Name</label>
                        <input class="form-control" name="note-name" type="text" id="note-name">
                    </div>
                    <div class="form-group mb-4">
                        <label for="note-title" class="text-uppercase">Note Title</label>
                        <input class="form-control" name="note-title" type="text" id="note-title">
                    </div>
                    <div class="form-group mb-4">
                        <label for="note-text" class="text-uppercase">Note Text</label>
                        <textarea class="form-control" name="note-text" id="note-text" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-4 text-center">
                        <button class="btn btn-primary rounded my-4 px-5">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>