import FormBaseContainer from "./Base.js";

export default class ButtonContainer extends FormBaseContainer {

    constructor(parentContainer) {
        super("button", parentContainer);
        this.type = "button";
    }


    set label(value) {
        this._htmlElement.innerHTML = value;
    }


    set type(value) {
        this._htmlElement.type = value;
    }


}
