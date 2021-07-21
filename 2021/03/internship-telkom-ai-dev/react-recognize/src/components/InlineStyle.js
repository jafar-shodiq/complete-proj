import React, { Component } from "react";

class InlineStyle extends Component {
    constructor(props) {
        super(props);
        this.state = {
            selectValue: ""
        };

        this.handleDropdownChange = this.handleDropdownChange.bind(this);
    }

    handleDropdownChange(e) {
        this.setState({ selectValue: e.target.value });
    }

    render() {
        return (
            <div>
                <div>
                    <div>
                        <select id="dropdown" onChange={this.handleDropdownChange}>
                            <option value="N/A">N/A</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div>Selected value is : {this.state.selectValue}</div>
                </div>
            </div>
        );
    }
}
export default InlineStyle;