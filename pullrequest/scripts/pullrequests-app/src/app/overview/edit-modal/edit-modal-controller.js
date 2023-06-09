export default EditModalController;

EditModalController.$inject = [
    "modal_instance",
    "PullRequestService",
    "pullrequest",
    "on_success_callback",
];

function EditModalController(modal_instance, PullRequestService, pullrequest, on_success_callback) {
    const self = this;

    Object.assign(self, {
        save,
        raw_title: pullrequest.raw_title,
        raw_description: pullrequest.raw_description,
        is_saving: false,
    });

    function save() {
        self.is_saving = true;

        PullRequestService.updateTitleAndDescription(
            pullrequest,
            self.raw_title,
            self.raw_description
        )
            .then(() => {
                on_success_callback();
            })
            .catch(() => {
                self.raw_title = pullrequest.raw_title;
                self.raw_description = pullrequest.raw_description;
            })
            .finally(() => {
                self.is_saving = false;
                modal_instance.tlp_modal.hide();
            });
    }
}
