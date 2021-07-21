import React from "react";

export default class Recognize2 extends React.Component {
    state = {
        loading: true,
        person: null
    };

    async componentDidMount() {
        const url = "http://localhost:5000/recognize";
        const response = await fetch(url);
        const data = await response.json();
        this.setState({ person: data, loading: false });
        console.log(data)
    }

    render() {
        if (this.state.loading) {
            return <div>loading...</div>;
        }

        if (!this.state.person) {
            return <div>didn't get a person</div>;
        }

        return (
            <div>
                <div>{this.state.person[0].image}</div>
            </div>
        );
    }
}