import NumberInput from "./NumberInput.js";

export default class RangeInputContainer extends NumberInput {

    constructor(parentContainer) {
        super( parentContainer);
        this._htmlElement.type = "range";
    }


}