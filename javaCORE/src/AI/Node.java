package AI;

import java.util.ArrayList;
import java.util.List;

public class Node {
    int state;
    boolean visited;
    List<Node> neighbours;
    Node parent;
    Node(int state)
    {
        this.state=state;
        this.neighbours=new ArrayList<>();
        this.parent= null;
    }
    public void addNeighbours(Node neighbourNode)
    {
        this.neighbours.add(neighbourNode);
        neighbourNode.parent = this;
    }
    public List<Node> getNeighbours() {
        return neighbours;}

}
