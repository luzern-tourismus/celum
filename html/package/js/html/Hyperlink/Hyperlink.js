import ContentContainer from "../Base/Content.js";

// AnchorContainer
export default class HyperlinkContainer extends ContentContainer {

    constructor(parentContainer) {

        super("a", parentContainer);
        this.href = "#";

    }


    set href(value) {

        this._htmlElement.href = value;
        return this;

    }


    set title(value) {

        this._htmlElement.title = value;
        return this;

    }


    set download(value) {

        this.addAttribute("download", value);
        return this;

    }


    set target(value) {

        this._htmlElement.target = value;
        return this;

    }


    set openNewTab(value) {

        this._htmlElement.target = "_blank";
        return this;

    }


    set onClick(event) {

        super.onClick = event;
        this.href = "javascript:void(0)";

    }

}