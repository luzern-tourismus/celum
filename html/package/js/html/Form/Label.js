import ContentContainer from "../Base/Content.js";

export default class LabelContainer extends ContentContainer {

    constructor(parentContainer) {
        super("label", parentContainer);
    }


    set htmlFor(value) {
        this._htmlElement.htmlFor = value;
    }

}