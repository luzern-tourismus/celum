import InputContainer from "./Input.js";


export default class HiddenInputContainer extends InputContainer {

    constructor(parentContainer) {
        super(parentContainer);
        this._htmlElement.type = "hidden";
    }

}