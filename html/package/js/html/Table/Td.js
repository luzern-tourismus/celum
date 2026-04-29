import ContentContainer from "../Base/Content.js";

export default class TdContainer extends ContentContainer {

    constructor(parentContainer) {
        super("td", parentContainer);
    }

    set nowrap(value) {
        if (value) {
            this._htmlElement.setAttribute("nowrap", "");
        }
    }

}