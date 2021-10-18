<div id="newNote">
    <div class="noteWrap col-md-8 col-md-offset-2">
        <h3>Add new note</h3>
        <form class="form-note">
            <div class="form-group">
                <input class="note-title form-control" name="noteTitle" type="text" placeholder="Note Title...">
            </div>
            <div class="form-group">
                <textarea id="noteEditor" name="noteEditor" class="hide"></textarea>
                <textarea class="summernote" placeholder="Write note here..."></textarea>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <a href="#" class="btn btn-info close-subview-button">
                        Close
                    </a>
                </div>
                <div class="btn-group">
                    <button class="btn btn-info save-note" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>