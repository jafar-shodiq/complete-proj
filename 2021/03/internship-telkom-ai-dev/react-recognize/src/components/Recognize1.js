import React from "react";

export default class FetchRandomUser extends React.Component {
    state = {
        loading: true,
        data: []
    };

    // async componentDidMount() {
    //     const url = "https://api.randomuser.me/"
    //     const response = await fetch(url)
    //     const data = await response.json()
    //     this.setState({ person: data.results[0], loading: false })
    //     console.log(data.results[0])
    // }

    // render() {
    //     if (this.state.loading) {
    //         return <div>loading...</div>
    //     }

    //     if (!this.state.person) {
    //         return <div>didn't get a person</div>
    //     }

    //     return (
    //         <div>
    //             <div>{this.state.person.name.title}</div>
    //             <div>{this.state.person.name.first}</div>
    //             <div>{this.state.person.name.last}</div>
    //             <img src={this.state.person.picture.large} />
    //         </div>
    //     );
    // }

    // async componentDidMount() {
    //     fetch('http://localhost:5000/recognize')
    //         .then((response) => response.json())
    //         .then((findresponse) => {
    //             console.log(findresponse.image)
    //             this.setState({
    //                 data: findresponse,
    //             })
    //         })
    // }

    componentDidMount() {
        fetch("http://localhost:5000/recognize")
            .then((response) => {
                return response.json()
            })
            .then((json) => {
                this.setState({ data: json });
            });
        console.log(this.state.data)
    };

    render() {
        if (this.state.loading) {
            return <div>loading...</div>
        }

        if (!this.state.person) {
            return <div>didn't get a person</div>
        }

        return (
            <div>
                <ul>
                    {this.state.data.map((x, i) => <li key={i}>x.image</li>)}
                </ul>
            </div>
        );
    }
}