import BaseContainer from "../Base/Base.js";
import ContentContainer from "../Base/Content.js";

export default class ThContainer extends ContentContainer {

    constructor(parentContainer) {
        super("th", parentContainer);
    }

}