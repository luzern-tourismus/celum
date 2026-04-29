import BaseContainer from "../Base/Base.js";


export default class FormContainer extends BaseContainer {

    onSubmit = null;

    onAfterSubmit = null;

    constructor(parentContainer) {

        super("form", parentContainer);

    }


    // move to ContentForm
    validateForm() {

        return true;

    }


    clearForm() {

        this._htmlElement.reset();
        return this;

    }

}