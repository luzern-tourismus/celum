import BaseContainer from "../Base/Base.js";

export default class StylesheetLink extends BaseContainer {

    constructor(parentContainer) {

        super("link", parentContainer);
        this.addAttribute("rel","stylesheet");

    }

    set href(value) {
        this.addAttribute("href",value);
    }

}
