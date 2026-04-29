import BaseContainer from "../Base/Base.js";
import ThContainer from "./Th.js";
import HyperlinkContainer from "../Hyperlink/Hyperlink.js";

export default class TableHeader extends BaseContainer {

    constructor(parentContainer) {

        super("thead", parentContainer);

    }

    addText(text) {

        let th = new ThContainer(this);
        th.text = text;

        return this;

    }


    addSortingText(text, sorting) {

        let th = new ThContainer(this);

        let hyperlink = new HyperlinkContainer(header);
        hyperlink.text = text;
        hyperlink.onClick = function () {
            local.sorting = sorting;
            local.reloadData();
        };


    }


    addEmpty() {

        this.addText("");
        return this;

    }

}