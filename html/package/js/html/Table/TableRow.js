import TdContainer from "./Td.js";
import TrContainer from "./Tr.js";

export default class TableRow extends TrContainer {

    addText(text, nowrap = false) {

        let td = new TdContainer(this);
        td.text = text;
        td.nowrap = nowrap;

        return this;

    }


    addEmpty() {
        this.addText("&nbsp;");
        return this;
    }


    addContainer(container) {

        let td = new TdContainer();
        td.addContainer(container);

        super.addContainer(td);

        return this;

    }

}