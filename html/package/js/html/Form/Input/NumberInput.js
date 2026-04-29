import InputContainer from "../Input.js";

export default class NumberInput extends InputContainer {

    constructor(parentContainer) {
        super(parentContainer);
        this._htmlElement.type = "number";
    }

    set minValue(value) {
        this._htmlElement.min = value;
    }

    set maxValue(value) {
        this._htmlElement.max = value;
    }

    set stepValue(value) {
        this._htmlElement.step = value;
    }



}