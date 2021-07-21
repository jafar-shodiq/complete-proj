import React from "react";

export default class Recognize3 extends React.Component {
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

        let personList = person.length > 0
            && person.map((item, i) => {
                return (
                    <option key={i} value={item.id} > {item.image}</option>
                )
            }, this)


        if (this.state.loading) {
            return <div>loading...</div>;
        }

        if (!this.state.person) {
            return <div>didn't get a person</div>;
        }

        return (
            <div>
                <select>
                    {personList}
                </select>
            </div>
        );
    }
}