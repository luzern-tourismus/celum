import BaseContainer from "../Base/Base.js";


export default class FormBaseContainer extends BaseContainer {

    set disabled(value) {
        this._htmlElement.disabled = value;
    }

    get disabled() {
        return this._htmlElement.disabled;
    }

    set ariaLabel(value) {
        this._htmlElement.ariaLabel = value;
    }

}