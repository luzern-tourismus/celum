import BaseContainer from "../Base/Base.js";

export default class ScriptContainer extends BaseContainer {

    constructor(parentContainer) {
        super("script", parentContainer);
    }

    set src(value) {
        this.addAttribute("src",value);
    }

    set type(value) {
        this.addAttribute("type",value);
    }

}
