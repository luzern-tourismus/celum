import InputContainer from "../Input.js";

export default class ColorInputContainer extends InputContainer {


    constructor(parentContainer) {
        super(parentContainer);
        this._htmlElement.type = "color";
    }

}