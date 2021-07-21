import React from "react";

export default class Recognize4 extends React.Component {
    state = {
        loading: true,
        person: []
    };

    async componentDidMount() {
        const url = "http://localhost:5000/recognize";
        const response = await fetch(url);
        const data = await response.json();
        this.setState({ person: data, loading: false });
        console.log(data)
    }

    render() {
        const { person } = this.state;

        let groupList = person.length > 0
            && person.map((item, i) => {
                return (
                    <option key={i} value={item.id} > {item.groupname}</option>
                )
            }, this)

        let subgroupList = person.length > 0
            && person.map((item, i) => {
                return (
                    <option key={i} value={item.id} > {item.subgroupname}</option>
                )
            }, this)

        return (
            <div>
                <select>{groupList}</select>
                <br />
                <select>{subgroupList}</select>
                <p>[upload]</p>

                <button type='submit'>submit</button>
            </div >
        );
    }
}